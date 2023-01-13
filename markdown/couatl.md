---
statblock: true
name: 'Couatl - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Celestial
cr: 4
ac: 16
hp: 85
hit_dice: '10d8 + 40'
speed: '30 ft., fly 90 ft.'
stats:
    - 18
    - 18
    - 18
    - 18
    - 20
    - 18
damage_resistances: 'psychic, radiant; damage from nonmagical weapons'
saves:
    constitution: 6
    wisdom: 7
    charisma: 6
skillsaves:
    perception: 7
    persuasion: 6
    religion: 7
senses: 'truesight 120 ft., passive Perception 17'
languages: 'all, telepathy 120 ft.'
traits:
    0: { name: 'Innate Spellcasting', desc: "The couatl's spellcasting ability is Charisma (spell save DC 14). It can innately cast the following spells, requiring no material components:" }
    traits: ['At will: detect evil and good, detect magic', '3/day each: create food and water, detect thoughts, lesser restoration', '1/day each: dream, greater restoration, scrying']
    1: { name: 'Lawful Good', desc: 'The couatl radiates a Lawful and Good aura.' }
    2: { name: Nondetection, desc: "The couatl can't be targeted or perceived by divination magic." }
actions:
    - { name: Constrict, desc: "Melee Weapon Attack: +6 to hit, reach 5 ft., one Medium or smaller creature. Hit: 14 (3d6 + 4) bludgeoning damage, and the target is grappled (escape DC 14). Until this grapple ends, the target is restrained, the couatl can't constrict other targets, and the couatl has advantage on attacks against the target." }
    - { name: Bite, desc: 'Melee Weapon Attack: +6 to hit, reach 5 ft., one target. Hit: 7 (1d6 + 4) piercing damage, and the target makes a DC 14 Constitution saving throw. On a failure, it is poisoned for 24 hours. The target is unconscious until the poisoned condition ends or a creature uses an action to shake the target awake.' }
    - { name: 'Heal (1/Day)', desc: 'The couatl touches a creature, magically healing 20 hit points of damage and ending the poisoned condition on that creature.' }
    - { name: Shapeshift, desc: "The couatl magically changes its form to resemble that of a humanoid or beast, or back into its true form. It reverts to its true form if it dies. If its form is humanoid, it is equipped with clothing and a weapon. While shapeshifted, its statistics are the same except that it can't use Constrict and Shielding Wing and it may gain a swim speed of 60 or lose its fly speed if appropriate to its new form. If it's a beast, it can use its bite attack. If it's a humanoid, it may make a weapon attack, which functions identically to its bite attack." }
reactions:
    - { name: 'Shielding Wing', desc: 'When the couatl or a creature within 5 feet is attacked, the couatl can interpose a wing and impose disadvantage on the attack.' }
combat:
    - { name: 'The couatl constricts its most dangerous or wicked foe and then bites it with advantage', desc: 'It uses Shielding Wing to protect allies first, itself second. It retreats only if the stakes are minor.' }

---
```statblock
monster: Couatl - A5E
```
