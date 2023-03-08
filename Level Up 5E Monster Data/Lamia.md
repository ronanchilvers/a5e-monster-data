---
statblock: true
name: Lamia
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Monstrosity
cr: 4
ac: 13
hp: 85
hit_dice: '10d10 + 30'
speed: '30 ft.'
stats:
    - 16
    - 16
    - 16
    - 14
    - 16
    - 18
skillsaves:
    - { deception: 6 }
    - { perception: 5 }
    - { stealth: 5 }
senses: 'darkvision 60 ft., passive Perception 15'
languages: 'Abyssal, Common'
traits:
    0: { name: 'Chaotic Evil', desc: 'The lamia radiates a Chaotic and Evil aura.' }
    1: { name: 'Innate Spellcasting', desc: "The lamia's innate spellcasting ability is Charisma (spell save DC 14). It can innately cast the following spells, requiring no material components." }
    traits: ['At will: charm person, disguise self (humanoid form), major image, misty step', '1/day each: geas, hallucinatory terrain, hypnotic pattern, scrying']
actions:
    - { name: 'Dizzying Touch', desc: 'Melee Spell Attack: +6 to hit, reach 5 ft., one creature. Hit: The target is magically charmed for 1 hour or until it takes damage. While charmed in this way, it has disadvantage on Wisdom saving throws and ability checks.' }
    - { name: Claws, desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one target. Hit: 17 (4d6 + 3) slashing damage.' }
    - { name: Dagger, desc: 'Melee or Ranged Weapon Attack: +5 to hit, reach 5 ft. or range 20/60 ft., one target. Hit: 5 (1d4 + 3) piercing damage, and the target makes a DC 13 Constitution saving throw. On a failure, the target takes 10 (3d6) poison damage and is poisoned for 1 hour.' }
    - { name: 'Hypnotic Pattern (3rd-Level; S, Concentration)', desc: 'A swirling pattern of light appears at a point within 120 feet. Each creature within 10 feet of the pattern that can see it makes a DC 14 Wisdom saving throw. On a failure, the creature is charmed for 1 minute. While charmed, the creature is incapacitated and its Speed is 0. The effect ends on a creature if it takes damage or if another creature uses an action to shake it out of its daze.' }
'bonus actions':
    - { name: 'Misty Step (2nd-Level; V)', desc: "The lamia teleports to an unoccupied space it can see within 30 feet. The lamia can't cast this spell and a 1st-level or higher spell on the same turn." }
combat:
    - { name: 'Lamias avoid melee combat, sending their servants to fight for them while they use hypnotic pattern and throw daggers at their enemies from a distance', desc: 'When cornered, they claw their foe and escape with misty step.' }

---
```statblock
monster: Lamia
```
