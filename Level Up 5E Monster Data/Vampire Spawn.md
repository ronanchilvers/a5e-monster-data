---
statblock: true
name: 'Vampire Spawn'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Undead
cr: 4
ac: 15
hp: 76
hit_dice: '9d8 + 36'
speed: '30 ft., climb 30 ft.'
stats:
    - 18
    - 16
    - 18
    - 10
    - 14
    - 14
damage_resistances: 'necrotic; damage from nonmagical, non-silvered weapons'
'damage vulenrabilities': radiant
saves:
    - { dexterity: 5 }
    - { wisdom: 4 }
skillsaves:
    - { perception: 4 }
    - { stealth: 5 }
senses: 'darkvision 60 ft., passive Perception 14'
languages: 'the languages it knew in life'
traits:
    - { name: Regeneration, desc: "The vampire regains 10 hit points at the start of its turn if it has at least 1 hit point and hasn't taken radiant damage since its last turn." }
    - { name: 'Spider Climb', desc: 'The vampire can climb even on difficult surfaces and upside down on ceilings.' }
    - { name: 'Vampire Weaknesses', desc: "Vampires' most common weaknesses are sunlight and running water. When the vampire ends its turn in contact with one of its weaknesses (such as being bathed in sunlight or running water), it takes 20 radiant damage. While in contact with its weakness, it can't use its Regeneration trait." }
actions:
    - { name: Multiattack, desc: 'The vampire makes two attacks, only one of which can be a bite attack.' }
    - { name: Grab, desc: 'Melee Weapon Attack: +6 to hit, reach 5 ft., one target. Hit: 8 (1d8 + 4) bludgeoning damage. The target is grappled (escape DC 14).' }
    - { name: Bite, desc: "Melee Weapon Attack: +6 to hit, reach 5 ft., one target that is grappled, incapacitated, restrained, or willing. Hit: 9 (1d10 + 4) piercing damage plus 14 (4d6) necrotic damage. The target's hit point maximum is reduced by an amount equal to the necrotic damage dealt, and the vampire regains this number of hit points. The reduction lasts until the target finishes a long rest. If the target is reduced to 0 hit points by this attack, it dies." }
reactions:
    - { name: 'Hissing Scuttle (1/Day)', desc: 'When the vampire takes radiant damage, it moves up to its Speed without provoking opportunity attacks.' }
combat:
    - { name: 'The vampire grabs and bites its most vulnerable opponent', desc: 'Once it has weakened a foe with a bite attack, the vampire uses its Blood Charm on that target. When reduced to 30 hit points or fewer, the vampire retreats in animal or mist form through well-prepared escape routes, returning to take its revenge another day.' }

---
```statblock
monster: Vampire Spawn
```
