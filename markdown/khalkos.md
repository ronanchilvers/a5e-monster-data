---
statblock: true
name: 'Khalkos - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Aberration
cr: 9
ac: 16
hp: 130
hit_dice: '20d8 + 40'
speed: '30 ft., fly 30 ft.'
stats:
    - 12
    - 16
    - 14
    - 18
    - 16
    - 16
damage_resistances: 'fire, psychic, radiant'
condition_immunities: charmed
saves:
    - { intelligence: 8 }
    - { wisdom: 7 }
    - { charisma: 7 }
skillsaves:
    - { deception: 7 }
    - { insight: 7 }
    - { perception: 7 }
    - { persuasion: 7 }
    - { religion: 8 }
senses: 'darkvision 60 ft., passive Perception 17'
languages: 'Abyssal, Celestial, Infernal, telepathy 120 ft.'
traits:
    0: { name: 'Detect Alignment', desc: 'The khalkos can detect the presence of creatures within 30 feet that have an alignment trait, and knows the alignment of such creatures.' }
    1: { name: 'Magic Resistance', desc: 'The khalkos has advantage on saving throws against spells and magical effects.' }
    2: { name: 'Psionic Spellcasting', desc: "The khalkos's spellcasting ability is Intelligence (spell save DC 16). It can innately cast the following spells, requiring no components:" }
    traits: ['1/day each: alter self, plane shift (self only), telekinesis, teleportation circle']
actions:
    - { name: Claw, desc: 'Melee Weapon Attack: +7 to hit, reach 5 ft., one target. Hit: 5 (1d4 + 3) slashing damage plus 10 (3d6) poison damage.' }
    - { name: 'Chaos Pheromones', desc: 'The khalkos emits a cloud of pheromones in a 20-foot radius. The cloud spreads around corners. Each non-khalkos creature in the area makes a DC 14 Intelligence saving throw. Creatures with an alignment trait make this save with disadvantage. On a failure, the creature is confused for 1 minute. It repeats the saving throw at the end of each of its turns, ending the effect on itself on a success. If the creature makes its saving throw or the condition ends for it, it is immune to Chaos Pheromones for the next 24 hours.' }
    - { name: 'Psionic Sting', desc: 'The khalkos targets a creature within 30 feet, forcing it to make a DC 16 Intelligence saving throw. On a failure, the target takes 28 (8d6) psychic damage and is stunned until the end of its next turn.' }
reactions:
    - { name: 'Telekinetic Shield', desc: 'When the khalkos is hit by an attack made by a creature that it can see or sense with its Detect Alignment trait, it gains a +4 bonus to AC against the triggering attack.' }
'bonus actions':
    - { name: 'Brain Jab', desc: "Melee Weapon Attack: +7 to hit, reach 5 ft., one incapacitated creature with a brain and an Intelligence of 6 or higher. Hit: 5 (1d4 + 3) piercing damage, and the target becomes diseased with brain larvae. Once the khalkos has used this attack successfully, it can't use it again for 24 hours." }
combat:
    - { name: 'The khalkos starts combat by using Chaos Pheromones on clusters of enemies, and then uses Psionic Sting on either a creature with an alignment or a creature likely to fail an Intelligence saving throw', desc: "Once an enemy is stunned, the khalkos uses Brain Jab. The khalkos retreats once it has infected a target with brain larvae (possibly using plane shift if it hasn't already today)." }

---
```statblock
monster: Khalkos - A5E
```
