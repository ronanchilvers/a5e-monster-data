---
statblock: true
name: 'Dread Knight - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Undead
cr: 19
ac: 18
hp: 262
hit_dice: '25d8 + 150'
speed: '30 ft.'
stats:
    - 22
    - 16
    - 22
    - 14
    - 18
    - 20
damage_immunities: 'cold, fire, necrotic, poison'
condition_immunities: 'charmed, fatigue, frightened, poisoned, stunned'
saves:
    dexterity: 9
    constitution: 12
    intelligence: 8
    wisdom: 10
    charisma: 11
skillsaves:
    history: 8
    intimidation: 11
    perception: 10
senses: 'truesight 60 ft., passive Perception 20'
languages: 'the languages it knew in life'
traits:
    - { name: 'Undead Nature', desc: "A dread knight doesn't require air, sustenance, or sleep." }
    - { name: 'Unholy Aura', desc: "The dread knight and allies within 30 feet have advantage on saving throws against spells and other magic effects and against features that turn undead. Other creatures of the dread knight's choice within 30 feet have disadvantage on saving throws against spells and other magic effects." }
actions:
    - { name: 'Cursed Greatsword', desc: "Melee Weapon Attack: +12 to hit, reach 5 ft., one target. Hit: 13 (2d6 + 6) slashing damage plus 14 (4d6) necrotic damage, and the target's hit point maximum is reduced by an amount equal to the necrotic damage taken. This reduction lasts until the target finishes a long rest. The target dies if its hit point maximum is reduced to 0." }
    - { name: 'Fire Blast (1/Day)', desc: "A fiery mote streaks from the dread knight's finger to a point within 120 feet and blossoms into a 20-foot-radius sphere of black fire which spreads around corners. Each creature within the area makes a DC 16 Dexterity saving throw, taking 63 (18d6) fire damage on a failed saving throw or half damage on a success. This damage ignores fire resistance and treats immunity to fire damage as fire resistance." }
    - { name: 'Ice Wall (1/Day)', desc: 'The dread knight magically creates a wall of ice on a solid surface it can see within 60 feet. The wall is flat, 1 foot thick, and can be up to 50 feet long and 15 feet high. The wall lasts for 1 minute or until destroyed. Each 10-foot section has AC 12, 30 hit points, vulnerability to fire damage, and immunity to cold, necrotic, poison, and psychic damage.' }
    - { name: "If the wall enters a creature's space when it appears, the creature is pushed to one side of the wall (creature's choice)", desc: 'The creature then makes a DC 16 Dexterity saving throw, taking 49 (14d6) cold damage on a successful save or half damage on a success.' }
    - { name: 'Soul Wrack (1/Day)', desc: 'A creature within 60 feet makes a DC 16 Constitution saving throw, taking 70 (20d6) necrotic damage and falling prone on a failed save or taking half damage on a success.' }
    - { name: 'Summon Fiendish Steed (1/Day)', desc: "A fell nightmare or wyvern magically appears in an empty space within 5 feet. The steed follows the dread knight's commands and acts on its turn. It may attack on the turn on which it is summoned. It remains until the dread knight dismisses it as an action or it is killed." }
'bonus actions':
    - { name: 'Cursed Greatsword', desc: 'The dread knight makes a cursed greatsword attack.' }
    - { name: 'Break Magic', desc: 'The dread knight ends all spell effects created by a 5th-level or lower spell slot on a creature, object, or point within 30 feet.' }
combat:
    - { name: 'The dread knight uses its bonus action to duel the strongest melee combatant with its cursed greatsword, while using Fire Blast, Soul Wrack, and Wall of Ice to eliminate or cut off those who interfere', desc: 'If it is bloodied and without allies, it uses Summon Fiendish Steed and tries to escape.' }

---
```statblock
monster: Dread Knight - A5E
```
